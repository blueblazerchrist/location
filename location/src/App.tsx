import React from 'react';
import './App.css';
import LocationList from './components/LocationList';
import { Container, Typography } from '@mui/material';

function App() {
  return (
    <Container>
      <Typography variant="h3" component="h1" gutterBottom>
        Locations
      </Typography>
      <LocationList />
    </Container>
  );
}

export default App;
