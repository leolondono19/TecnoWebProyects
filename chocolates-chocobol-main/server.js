const express = require('express');
const mysql = require('mysql2');
const cors = require('cors');

const app = express();
const port = 3000;

console.log('Iniciando el servidor...');

app.use(cors());
app.use(express.json());

// Configura la conexión a la base de datos MySQL
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '1234',
  database: 'angular'
});

console.log('Conectando a la base de datos...');

connection.connect(error => {
  if (error) {
    console.error('Error al conectar a la base de datos:', error);
    return;
  }
  console.log('Conectado a la base de datos MySQL');
});

// Ejemplo de endpoint para obtener datos
app.get('/api/data', (req, res) => {
  console.log('Recibida solicitud GET en /api/data');
  const query = 'SELECT * FROM tu_tabla';
  connection.query(query, (error, results) => {
    if (error) {
      console.error('Error en la consulta a la base de datos:', error);
      res.status(500).send(error);
      return;
    }
    res.json(results);
  });
});

app.listen(port, () => {
  console.log(`Servidor corriendo en http://localhost:${port}`);
});
