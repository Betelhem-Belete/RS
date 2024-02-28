import { WebSocketGateway, WebSocketServer, SubscribeMessage } from '@nestjs/websockets';
import {  OnModuleInit } from '@nestjs/common';

import { Server, Socket } from 'socket.io';
import { JwtService, TokenExpiredError } from '@nestjs/jwt';
import { NotificationService } from './notification.service';

interface JwtPayload {
  id: string;
  role: string;
  iat?: number;
  exp?: number;
}

export interface socketMetaPayload extends JwtPayload {
  socketId: string;
}

@WebSocketGateway({ cors: '*' })
export class NotificationGateway implements OnModuleInit {

  @WebSocketServer()
  server: Server;
  socketMap = new Map<string, socketMetaPayload>();

  constructor(
    private readonly notificationService: NotificationService,
    private readonly jwt: JwtService
  ) { }

  onModuleInit() {
    this.server.on('connection', async (socket) => {
      console.log(`socket connected: ${socket.id}`);
      const token = socket.handshake.headers.authorization?.split(' ')[1];
      if (!token) {
        socket.disconnect(true);
        console.log('returned');
        return;
      }

      try {
        const payload = this.jwt.verify(token);
        console.log("mypayload", payload);
        
        this.socketMap.set(payload.id, {
          ...payload,
          socketId: socket.id,
        });
        
      } catch (error) {
        if (error instanceof TokenExpiredError) {
          console.log('Token expired');
        } else {
          console.error('Error verifying token:', error);
        }
        // socket.disconnect(true);
        return;
      }
    });
    
  }
  async emitNotificationToAdmins(notification) {
    // Filter users by role
    const adminSockets = Array.from(this.socketMap.values()).filter(socketMeta => socketMeta.role === 'admin');

    // Send notification to admin sockets
    adminSockets.forEach(socketMeta => {
      this.server.to(socketMeta.socketId).emit('notification', notification);
    });

    // Log if no admin sockets found
    if (adminSockets.length === 0) {
      console.log('No admin users online at the moment!');
    }
  }

  @SubscribeMessage('currentUsers')
  async currentUsers(client: Socket) {
    client.emit('currentUsers', Array.from(this.socketMap.values()));
  }
}
