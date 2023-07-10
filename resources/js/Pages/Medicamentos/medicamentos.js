import React from 'react';
import { InertiaLink } from '@inertiajs/inertia-react';

const Medicamentos = ({ medicamentos }) => {
  return (
    <div>
      <h1>Medicamentos</h1>

      <ul>
        {medicamentos.map((medicamento) => (
          <li key={medicamento.id}>
            {medicamento.nombre} - {medicamento.fechaVencimiento}
          </li>
        ))}
      </ul>

      <InertiaLink href="/medicamentos/create">Agregar Medicamento</InertiaLink>
    </div>
  );
};

export default Medicamentos;
