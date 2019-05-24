import React from 'react';
import { View, Text, StyleSheet} from 'react-native';
import { Avatar, Button, Card, Title, TextInput } from 'react-native-paper';


export default class Assurance extends React.Component{

  constructor(){}


  state = {
      variable : true,
      nom: '',
      prenom:'',
      adresse:'',
      telephone: ''
  }
    render()
    {
        return(
            <View>
                 <Card>
                     <Card.Title>
                         <Text>Formulaire d'inscription</Text>
                     </Card.Title>
                     <Card.Content>
                         <TextInput
                         label= 'Nom'
                            value= { this.state.nom}
                            onChangeText={nom => this.setState({ nom })}
                         />
                         <TextInput
                          label = 'prenom'
                          value = { this.state.prenom }
                          onChangeText = { prenom => this.setState({ prenom })}
                         />
                         <TextInput label = 'adrresse' value= 
                         {this.state.adresse}
                          onChangeText = {adresse => this.setState({ adresse})} />
                         <TextInput label =
                          'telephone' value= { this.state.telephone} 
                          onChangeText = { telephone => this.setState({ telephone})} />
                        
                     </Card.Content>
                 </Card>
            </View>
        );
    }
}
styles = StyleSheet.create({
 textInput: {
    flex: 1,
    
 },
 container: {

 },
});