import React, {Component} from 'react';
import PropTypes from 'prop-types';
import Dimensions from 'Dimensions';
import {StyleSheet, Image} from 'react-native';

import bgSrc from './image/wallpapers.png';

export default class Wallpaper extends Component {
  render() {
    return (
      <Image style={styles.picture} >
        {this.props.children}
      </Image>
    );
  }
}

const styles = StyleSheet.create({
  picture: {
    flex: 1,
    width: null,
    height: null,
    resizeMode: 'cover',
  },
});