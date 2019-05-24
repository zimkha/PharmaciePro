import React from 'react';
import { View, Text, Button} from 'react-native';
import { TabNavigator } from 'react-navigation';



 class HomeScreen extends React.Component{


    render(){
        return (
            <View style={{ flex: 1, justifyContent:"center", alignItems:"center"}}>
                    <Text>Home</Text>
            </View>
        );
    }
}

class SettingsScreen extends React.Component{
    render(){
        return(
            <View>
                  <Text>Setting</Text>
            </View>
        );
    }
}
export default TabNavigator({
   Home: {screen: HomeScreen},
   Setting : {screen: SettingsScreen}
});