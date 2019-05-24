import React from 'react'
import { StyleSheet,ToastAndroid, 
    Text,TouchableOpacity,
     View, ActivityIndicator, 
     Button , Alert, 
      FlatList, ScrollView} from 'react-native';



export default class Index extends React.Component{

    constructor(props){
        super(props);
        this.state = {chargement:true,
         dataSource: [],
         error: null,   
         visible : true,
         showView: false
       }
       
      }
      _goBack = () => console.log('Went back');
   
     _onSearch = () => console.log('Searching');
   
     _onMore = () => console.log('Shown more');
     _onShow = () =>{
       this.setState({
          showView : true
       });
     }
     
     renderItem = ({item}) =>{
       return(
         <View >
          <TouchableOpacity style={{ flex: 1, flexDirection: 'row', marginBottom:2}}
           >
          <Card>
                           <Card.Title title={ item.name.first} left={(props) => <Avatar.Image size={30} source={require('./assets/img_avatar2.png')} />} />
                           <Card.Content>
                           <Title> <Text>
                           { item.name.last}
                             </Text></Title>
                           <Paragraph>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </Paragraph>
                           </Card.Content>
                           <Card.Actions>
                           <PaperButton>Details</PaperButton>
                           <PaperButton>S'assuré</PaperButton>
                           </Card.Actions>
                           </Card>
          </TouchableOpacity>
            
        
       </View>
       );
       
     } 
     _keyExtractor = (item, index) => item._id;
      componentDidMount(){
        return fetch('https://next.json-generator.com/api/json/get/NJOAhH0j8')
           .then((response) => response.json())
           .then((responseJson) =>{
                
             this.setState({
               chargement: false,
               dataSource :responseJson,
             }, function(){
              
             });
              console.log(dataSource);
           })
           .catch((error) => {
             this.setState({
                error, chargement:true
             })
           });
      }
     render() {
       if(this.state.chargement){
         return(
           <View style={{flex: 2, padding: 100}}>
             <ActivityIndicator/>
            <Text>chargement des données</Text>
   
           </View>
         )
       } if(this.state.showView){
            return (
             <View showView = {this.state.showView}>
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
       return (
         <View style={{flex: 1, paddingTop:20}}>
            
         <ScrollView>
        
         <View>
          <Appbar.Header>
           <Appbar.BackAction
             onPress={this._goBack}
           />
           <Appbar.Content
             title="Home"
             subtitle="Assurance"
           />
         
           <Appbar.Action icon="search" onPress={this._onSearch} />
           <Appbar.Action icon="label" onPress={() => {this._onShow}} />
         </Appbar.Header>
         <Text>LISTE DES DIFFERENTS TYPE D'ASSURANCES</Text>
         <Banner 
             visible={this.state.visible}
             actions={[
               {
                 label: 'Fix it',
                 onPress: () => this.setState({ visible: false }),
               }
             ]}
          />
          <FlatList
           data={this.state.dataSource}
           renderItem={this.renderItem}
           keyExtractor = { this._keyExtractor}
         />          
          </View>  
         </ScrollView>       
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

