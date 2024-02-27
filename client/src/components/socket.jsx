// ChatComponent.jsx

import React, { useState, useEffect } from 'react';
import io from 'socket.io-client';

const token = localStorage.getItem('access_token')

if(token){
  const {access_token} = JSON.parse(token);

console.log(access_token)
const socket = io('http://localhost:3000', {
  extraHeaders: {
    Authorization: `Bearer ${access_token}`
  }
});
}

const ChatComponent = () => {
  const [roomId, setRoomId] = useState('');
  const [message, setMessage] = useState('');
  const [receivedMessages, setReceivedMessages] = useState([]);

  // useEffect(() => {
  //   // Listener for incoming messages
  //   socket.on('connection', (message) => {

  //     setReceivedMessages(prevMessages => [...prevMessages, message]);
  //   });

  //   // Clean up function to remove the listener when component unmounts
  //   return () => {
  //     socket.off('connection');
  //   };
  // }, []);

  const handleJoinRoom = () => {
    socket.emit('joinRoom', roomId);
  };

  const handleMessageSend = () => {
    // Emit 'sendMessage' event with message and room ID
    socket.emit('sendMessage', { room: roomId, message });
    // Clear the message input after sending
    setMessage('');
  };

  return (
    <div>
      <h1>Chat Component</h1>
      <div>
        <input type="text" placeholder="Enter Room ID" value={roomId} onChange={(e) => setRoomId(e.target.value)} />
        <button onClick={handleJoinRoom}>Join Room</button>
      </div>
      <div>
        {receivedMessages.map((msg, index) => (
          <div key={index}>{msg}</div>
        ))}
      </div>
      <div>
        <input type="text" placeholder="Enter Message" value={message} onChange={(e) => setMessage(e.target.value)} />
        <button onClick={handleMessageSend}>Send Message</button>
      </div>
    </div>
  );
};

export default ChatComponent;
