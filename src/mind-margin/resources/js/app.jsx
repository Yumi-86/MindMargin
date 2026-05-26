import './bootstrap';

import FlashMessage from "./components/FlashMessage";
import { createRoot } from "react-dom/client";

function App() {
    console.log(window.flashMessage);

    return <FlashMessage message={window.flashMessage} />;
}

const el = document.getElementById("flash-root");

if (el) {
    createRoot(el).render(<App />); 
}
