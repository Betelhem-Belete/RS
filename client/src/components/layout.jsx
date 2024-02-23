import React from 'react'
import Todo from './Todo'
import Socket from './socket.jsx'
import Chat_pg from './caht.jsx'


const Layout = () => {
  return (
    <>
            <nav>
        <div className="nav nav-tabs" id="nav-tab" role="tablist">
            <button className="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Todos</button>
            <button className="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Chat</button>
            <button className="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Profile</button>
        </div>
        </nav>
        <div className="tab-content" id="nav-tabContent">
        <div className="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"><Todo/></div>
        <div className="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"><Socket/></div>
        <div className="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0"><Chat_pg/></div>
        </div>

    </>
  )
}

export default Layout
