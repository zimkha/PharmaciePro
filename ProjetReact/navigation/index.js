import React from 'react';
import {View, Image} from 'react-native';
import { createAppContainer, createStackNavigator} from 'react-navigation';
import { Category } from '../Screen/Category';
import { Formule } from '../Screen/Formule';
import { Home } from '../Screen/Home';
import { Login } from '../Screen/Login';
import { Profile } from '../Screen/Profile';
import { SingUp } from '../Screen/SingUp';

 const screens = createStackNavigator(
     {
        Category: { screen : Category},
        Formule: { screen :  Formule},
        Home: {screen :  Home},
        Login: { screen : Login },
        Profile: { screen : Profile },
        SingUp: {screen :  SingUp}
     }, 
    {
        defaultNavigationOptions:{
           headerStyle: {},
           headerBackImage: <Image />,
           headerBackTitle: null,
           headerLeft: { },
           headerRight:{}

        }
    })
export default createAppContainer(screens);