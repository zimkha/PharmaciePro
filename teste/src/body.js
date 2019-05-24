import React from 'react';



export default class Body extends React.Component
{
verifier  = function(){
  return new Promise(function(resolv, reject){
       fetch('http://localhost:8000/api/vehicule')
         .then(function(response){

         }).catch(function(error){
              console.log(error); 
         })
  });
    }
     render(){
         return(
             <div className="container">
                 Bonjour
             </div>
         );
     }
}