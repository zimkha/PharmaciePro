import React from 'react';
import {TextInput} from  'react-native';

export default class Recherche extends React.Component{

    constructor (props){
        super(props)
        this.state={
            seachr : 'Voir'
        }  
   }
    render(){
         
        return (   
            <TextInput
            underlineColorAndroid = 'transparent'
            style={{height: 40, borderColor: 'gray', borderWidth: 1}} />
        );
               
        
    }
}