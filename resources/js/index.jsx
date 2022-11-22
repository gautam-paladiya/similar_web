import "../css/app.css";
import React from "react";
import ReactDOM from "react-dom/client";
import App from "./components/App";

if (document.getElementById("app")) {
    console.log(" found");
    const Index = ReactDOM.createRoot(document.getElementById("app"));

    Index.render(<App />);
} else {
    console.log("not found");
}
