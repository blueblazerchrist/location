import React, { useEffect, useState } from 'react';
import { getLocations } from '../services/locationsService';
import { Grid, Card, CardContent, Typography, CardMedia } from '@mui/material';

interface Location {
  id: string;
  name: string;
  code: string;
  created_at: string;
  image: string;
}

const LocationList: React.FC = () => {
  const [locations, setLocations] = useState<Location[]>([]);

  useEffect(() => {
    const fetchLocations = async () => {
      try {
        const response = await getLocations();
        setLocations(response.data); // Accede a response.data
      } catch (error) {
        console.error('Error fetching locations:', error);
      }
    };

    fetchLocations();
  }, []);

  return (
    <Grid container spacing={2}>
      {locations.map(location => (
        <Grid item xs={12} sm={6} md={4} lg={3} key={location.id}>
          <Card>
            <CardMedia
              component="img"
              height="140"
              image={location.image}
              alt={location.name}
            />
            <CardContent>
              <Typography variant="h5" component="div">
                {location.name}
              </Typography>
              <Typography variant="body2" color="textSecondary">
                Code: {location.code}
              </Typography>
              <Typography variant="body2" color="textSecondary">
                Created: {new Date(location.created_at).toLocaleDateString()}
              </Typography>
            </CardContent>
          </Card>
        </Grid>
      ))}
    </Grid>
  );
};

export default LocationList;
