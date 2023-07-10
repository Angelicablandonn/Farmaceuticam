import React from 'react';
import { InertiaLink } from '@inertiajs/inertia-react';

const Ordenes = ({ ordenes }) => {
  return (
    <div>
      <h1>Órdenes</h1>

      <ul>
        {ordenes.map((orden) => (
          <li key={orden.id}>
            {orden.numeroOrden} - {orden.total}
          </li>
        ))}
      </ul>

      <InertiaLink href="/ordenes/create">Crear Orden</InertiaLink>
    </div>
  );
};

export default Ordenes;
