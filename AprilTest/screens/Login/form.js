import React, { Component } from 'react';
 
import {
  StyleSheet,
  Text,
  View,
  TextInput,
  ScrollView,
  TouchableOpacity
} from 'react-native';
 
  export default class Form extends React.Component{
     
    constructor(props)
    {
       super(props);
    }
       state = {
        username: '',
        password: 'ddd'
     }
    _onToucheButton =() =>
    {
        console.log(this.state.username )
    }


    render(){
       return(
         <View style={ styles.container}>
            <TextInput style={ styles.textInput} underlineColorAndroid={'transparent'} 
            
            placeholder ='Username' onChangeText = {(username) => this.setState({ username: username})} value={this.state.username}/>
             <TextInput style={ styles.textInput} underlineColorAndroid={'transparent'} 
            secureTextEntry={true}
            placeholder ='password' onChangeText = {(text) => this.setState({ password: text})} value={this.state.password} />
            <TouchableOpacity style ={styles.button} onPress= {this._onToucheButton.bind(this)}>
              <Text style = {styles.btnTxt}>LOGIN</Text>
            </TouchableOpacity>
         </View>
       )
    }
  }


  const styles = StyleSheet.create({
     container:{
         flex: 1,
         alignSelf: 'stretch',
         paddingLeft: 20,
         paddingRight: 20
     },
     textInput:{
        padding: 20,
        alignSelf: 'stretch',
        backgroundColor: 'rgba(255, 255, 255, 0.8)',
        marginBottom: 20,
     }, button: {
        alignItems: 'center',
        alignSelf: 'stretch',
        padding: 20,
        backgroundColor: 'rgba(0, 0, 0, 0.8)',
         
     },
     btnTxt:{
       color: '#fff'
     }
  });