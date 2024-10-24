import axios from 'axios';

const API_URL = 'http://location.test/api/locations';
const API_KEY = 'MybZuzKy5gjqi1mQsUCHXkbz5YpzHdUoAX0Q1k0U3fe7d105';

export const getLocations = async () => {
  try {
    const response = await axios.get(API_URL, {
      headers: {
        'Authorization': `Bearer ${API_KEY}`
      }
    });
    console.log(response.data)
    return response.data;
  } catch (error) {
    console.error('Error fetching locations:', error);
    throw error;
  }
};
