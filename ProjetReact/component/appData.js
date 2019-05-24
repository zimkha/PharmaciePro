import React from 'react';
import {View, FlatList} from 'react-native';


export default class AppData extends React.Component{

    constructor(){
        super();
        this.state = {
            dataSource :[]
        }
    }
    renderItem =() => {
        <View>
            
        </View>
    }
   componentDidMount (){
       fetch('https://next.json-generator.com/api/json/get/EkFSHBasL')
            .then((response) => response.json() )
            .then((responseJson) =>{
                      this.setState ({
                          dataSource = responseJson
                      });
            })
            .catch(()=>{})
   }
    render(){
        return(
            <View>
                <FlatList
                  data ={}
                  renderItem= {}
                />
            </View>
        );
    }
}