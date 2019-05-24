import React from 'react';
 
  import {KeyboardAvoidingView, StyleSheet,Image, Text, ImageBackground, ScrollView } from 'react-native';
import { ExpoConfigView } from '@expo/samples';
import Form from './Login/form';

export default class SettingsScreen extends React.Component {
  static navigationOptions = {
    title: 'app.json',
  };
     constructor (){
        super();
     }
    
  render() {
     return(
      <KeyboardAvoidingView behavior='padding' style={styles.wrapper}>
    <ImageBackground  style={styles.container} source={require('./Images/milky.jpg')}>
            <Text style={styles.header}>LOGIN</Text>
            
              <Form />
              
    </ImageBackground>
      </KeyboardAvoidingView>
     );
  }
}


const styles = StyleSheet.create({
   wrapper: {
      flex: 1
   },
   container:{
      flex: 1,
      alignSelf: 'stretch',
      width:null,
      justifyContent: 'center',
      alignItems: 'center'
   },
   header:{
      fontSize: 30,
      color: '#fff',
      fontWeight: 'bold',
      marginBottom: 80,
      marginTop: 40
   }
});