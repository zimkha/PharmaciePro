import React from 'react';
import {DefaultTheme, Provider as PaperProvider, Appbar, DataTable,  Avatar, Button as PaperButton, Card, Title, Paragraph, Banner } from 'react-native-paper';
import { StyleSheet,ToastAndroid, 
  Text,TouchableOpacity,
   View, ActivityIndicator, 
   Button , Alert,
    FlatList, ScrollView} from 'react-native';
    import {Assurance} from './component/AssurancePage';
    import { TabNavigator } from 'react-navigation';

import Index from './index';

export default class App extends React.Component {
  
   render(){
     return(

       <View>
           <Index />
       </View>
     );
   }

}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
  bottom: {
    position: 'absolute',
    left: 0,
    right: 0,
    bottom: 0,
  },
  item:{
  padding: 5,
  borderBottomWidth: 1
  }, 
 
});


