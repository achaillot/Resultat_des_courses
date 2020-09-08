import React, { Component, useState } from 'react';
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
// function User () {
//     return (
//         <div>
//             <h1>User</h1>
//             <p>Test user</p>
//         </div>
//     )
// }

// ReactDOM.render(
//     <User/>,
//     document.getElementById('user')
//   );

function displayInfos () {
        return (    
            <table class="table">
                <tbody>
                    <tr>
                        <th>Prénom</th>
                        {/* <td>{{ user.firstname }}</td> */}
                    </tr>
                    <tr>
                        <th>Nom</th>
                        {/* <td>{{ user.lastname }}</td> */}
                    </tr>
                    <tr>
                        <th>Email</th>
                        {/* <td>{{ user.email }}</td> */}
                    </tr>
                </tbody>
            </table>
    
            // <a href="{{ path('user_edit', {'id': user.id}) }}">Modifer les informations de mon compte</a>
        )
}

function DisplayUserInfo() {
    return (
        <div>
            <table class="table">
                <tbody>
                    <tr>
                        <th>Prénom</th>
                        {/* <td>{{ user.firstname }}</td> */}
                    </tr>
                    <tr>
                        <th>Nom</th>
                        {/* <td>{{ user.lastname }}</td> */}
                    </tr>
                    <tr>
                        <th>Email</th>
                        {/* <td>{{ user.email }}</td> */}
                    </tr>
                </tbody>
            </table>

            <button onClick={displayInfos}>
                Voir vos informations
            </button>
        </div>
        
    )
}


ReactDOM.render(
    <DisplayUserInfo/>,
    document.getElementById('user')
  );

