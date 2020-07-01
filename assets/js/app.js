import React from 'react';
import ReactDOM from 'react-dom';
import Left from './components/Left/Left'
import Right from './components/Right/Right'


class App extends React.Component {
    constructor() {
        super();

        this.state = {
            entries: []
        };
    }


    render() {
        return (
            <div class="container py-5 px-4">
                
                <div class="row rounded-lg overflow-hidden shadow">

                <div class="col-5 px-0">
                    <div class="bg-white">
                        <Left/>
                    </div>
                </div>
                
                <Right/>
                
                </div>
            </div>
          
        );
    }
}

ReactDOM.render(<App />, document.getElementById('root'));