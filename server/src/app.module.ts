import { Module } from '@nestjs/common';
import { TodoModule } from './todo/todo.module';
import { TypeOrmModule } from '@nestjs/typeorm';
import { todo } from './typeorm/entitiy/todo';
import { getway } from './socket/socket.getway';
import { UserModule } from './user/user.module';
import { User } from './user/entities/user.entity';

@Module({
  imports: [TypeOrmModule.forRoot({
    type: 'mysql',
    host: 'localhost',
    port: 3306,
    username: 'tati', 
    password: '123',  
    database: 'test',
    entities: [todo, User],
    synchronize: true,
  }),TodoModule, UserModule],
  providers:[getway] // this is for websoket connection 
})
export class AppModule {}
