import React from 'react';
import ReactDOM from 'react-dom';

 
// sous forme de classe : 
// class App extends React.Component {
//     render() {
//         return (
//             <div>
//                 <h1>Hellllllllo, world!</h1>
//                 <p>Teeest</p>
//             </div>
//         )
//     }
// }

// ou sous forme de fonction :
function App () {
    return (
        <div>
            <h1>Helllo, world!</h1>
            <p>Teeeeeest</p>
        </div>
    )
}

ReactDOM.render(
    <App/>,
    document.getElementById('welcome')
  );