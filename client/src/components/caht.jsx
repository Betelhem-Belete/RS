import React, { useEffect, useState } from "react";
import { todo } from "../hooks/usetodo";
import "./chat.css"; // Import CSS file for styling

export default function Chat_pg() {
  const [data, setData] = useState([]);
  const [selectedUser, setSelectedUser] = useState(null);
  const [room, setRoom] = useState(null);
  const [message, setMessage] = useState("");
  const [chatMessages, setChatMessages] = useState([]);

  const url = 'http://localhost:3000/user/';
  const method = 'GET';

  const handleSearch = async () => {
    const chats = await todo(url, method);
    setData(chats);
  };

  // const handleUserClick = (user) => {
  //   setSelectedUser(user);
  //   // Assume you have a method to join a room with the selected user
  //   const newRoom = joinRoom(user.id); // Your implementation to join room
  //   setRoom(newRoom);
  // };
  const handleUserClick = async (user) => {
    setSelectedUser(user);
    // Send a POST request to create a chat with the selected user
    try {
      const response = await fetch('http://localhost:3000/chat', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          senderId: loggedInUserId, // Assuming you have the loggedInUserId
          receiverId: user.id,
        }),
      });
      if (response.ok) {
        const chatData = await response.json();
        // Use the chat data to join the chat room
        const newRoom = joinRoom(chatData.Id); // Your implementation to join room
        setRoom(newRoom);
      } else {
        throw new Error('Failed to create chat');
      }
    } catch (error) {
      console.error('Error creating chat:', error);
    }
  };
  const handleMessageSend = () => {
    if (message.trim() !== "") {
      // Assume you have a method to send message to the room
      sendMessage(room, message); // Your implementation to send message
      // Update chatMessages state with sent message
      setChatMessages([...chatMessages, { sender: "me", message }]);
      setMessage(""); // Clear message input after sending
    }
  };

  return (
    <div className="chat-container">
      <div className="search-bar">
        <input type="text" placeholder="Search" />
        <button onClick={handleSearch}>Search</button>
      </div>
      <div className="user-list">
        <h2>User List</h2>
        <ul>
          {data && data.map((user) => (
            <li key={user.id} onClick={() => handleUserClick(user)}>
              {user.email}
            </li>
          ))}
        </ul>
      </div>
      <div className="chat">
        {selectedUser && (
          <div className="chat-box">
            <h3>Chatting with {selectedUser.name}</h3>
            <div className="message-container">
              {chatMessages.map((msg, index) => (
                <div key={index} className={`message ${msg.sender === 'me' ? 'sent' : 'received'}`}>
                  <p>{msg.sender}: {msg.message}</p>
                </div>
              ))}
            </div>
            <div className="message-input">
              <input
                type="text"
                value={message}
                onChange={(e) => setMessage(e.target.value)}
                placeholder="Type your message..."
              />
              <button onClick={handleMessageSend}>Send</button>
            </div>
          </div>
        )}
      </div>
    </div>
  );
}
