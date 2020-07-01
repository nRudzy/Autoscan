import React from 'react';
import ReactDOM from 'react-dom';
import Message from './Message'
import Input from './Input';

export default class Right extends React.Component {
  render() {
    return (
      <>
        <div class="col-7 px-0">
                <div class="px-4 py-5 chat-box bg-white">
                  <Message />
                </div>
          
                <Input />
          
        </div>
      </>
        );
  }
}
