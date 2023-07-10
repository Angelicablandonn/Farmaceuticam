import React from 'react';
import { InertiaLink } from '@inertiajs/inertia-react';

const Facturacion = ({ facturacion }) => {
  return (
    <div>
      <h1>Facturación</h1>

      <ul>
        {facturacion.map((registro) => (
          <li key={registro.id}>
            {registro.numeroFactura} - {registro.monto}
          </li>
        ))}
      </ul>

      <InertiaLink href="/facturacion/create">Crear Registro de Facturación</InertiaLink>
    </div>
  );
};

export default Facturacion;
