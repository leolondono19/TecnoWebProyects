const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const PORT = process.env.PORT || 4000;

app.use(cors());
app.use(bodyParser.json());

// Ruta de ejemplo
app.get('/', (req, res) => {
  res.send('¡Hola desde la página de inicio!');
});

// Ruta de ejemplo para /api/message
app.get('/api/message', (req, res) => {
  res.json({ message: '¡Hola desde Express!' });
});

app.listen(PORT, () => {
  console.log(`Servidor Express escuchando en el puerto ${PORT}`);
});
