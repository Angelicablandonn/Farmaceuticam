import React from 'react';
import { InertiaLink } from '@inertiajs/inertia-react';

const Dashboard = ({ medicamentos, ordenes, facturacion }) => {
  return (
    <div>
      <h1>Dashboard</h1>

      <h2>Medicamentos</h2>
      <ul>
        {medicamentos.map((medicamento) => (
          <li key={medicamento.id}>
            {medicamento.nombre} - {medicamento.fechaVencimiento}
          </li>
        ))}
      </ul>

      <h2>Órdenes</h2>
      <ul>
        {ordenes.map((orden) => (
          <li key={orden.id}>
            {orden.numeroOrden} - {orden.total}
          </li>
        ))}
      </ul>

      <h2>Facturación</h2>
      <ul>
        {facturacion.map((registro) => (
          <li key={registro.id}>
            {registro.numeroFactura} - {registro.monto}
          </li>
        ))}
      </ul>

      <InertiaLink href="/medicamentos/create">Agregar Medicamento</InertiaLink>
    </div>
  );
};

export default Dashboard;
