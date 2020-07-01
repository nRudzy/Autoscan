import React from 'react';
import ReactDOM from 'react-dom';
import Conversation from './Conversation';

export default class Left extends React.Component {
  render() {
    return (
      <>
        <div class="bg-gray px-4 py-2 bg-light">
                    <p class="h5 mb-0 py-1">Conversations récentes</p>
        </div>
    
            <div class="messages-box">
                    <div class="list-group rounded-0">
                      <Conversation />
                    </div>
            </div>
            </>
        );
  }
}




