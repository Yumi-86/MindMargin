import './bootstrap';

import FlashMessage from "./components/FlashMessage";
import { createRoot } from "react-dom/client";

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

function App() {
    console.log(window.flashMessage);

    return <FlashMessage message={window.flashMessage} />;
}

const el = document.getElementById("flash-root");

// if (el) {
//     createRoot(el).render(<App />);
// }
