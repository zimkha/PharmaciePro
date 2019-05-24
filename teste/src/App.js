import React from 'react';
import './App.css';
import Body from './body';
import 'bootstrap/dist/css/bootstrap.min.css';
import { throwStatement } from '@babel/types';

export default class App extends React.Component {
    constructor(){
      super();
       this.state ={
           name: 'khazim',
           prenom: 'ndiaye'
       }
    }
render(){ 
   return (
      <div >
    <nav className="navbar light-primary bg-light">
    <a className="navbar-primary">     
   <span ><i className="fas fa-home">Home</i> </span>
    </a>  
  </nav>
      <div className="container">
          Bonjour Mrs {this.state.name} {this.state.prenom}
      </div>
      </div>
     
  );

}
}
 class Hello extends React.Component{

 }

