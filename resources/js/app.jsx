import '../css/app.css';
import React from 'react';
import { createRoot } from 'react-dom/client';
import Test from './Test';

const root = document.getElementById('app');

if (root) {
  createRoot(root).render(<Test />);
}
