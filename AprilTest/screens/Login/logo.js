import React from 'react';
import { StyleSheet, View, Text} from 'react-native';

import logoIm from './image/logo-april-africa.png';
import Colors from '../../constants/Colors';
export default class Logo extends React.Component
{
     render(){
         return (
             <View style = {styles.container}>
                  <Image source={logoIm} style={styles.imageLogo} />
                  <Text style={ styles.text }> APRIL AFRIC</Text>
             </View>
         )
     }
}


const styles = StyleSheet.create({
   container:{
    flex: 3,
    alignItems: 'center',
    justifyContent: 'center',
   },
   imageLogo:{
    width: 80,
    height: 80, 
   }, text:{
       color: 'white',
       fontWeight:'bold',
       backgroundColor: 'transparent',
       position: 'absolute',
       marginTop: 20
   }
});