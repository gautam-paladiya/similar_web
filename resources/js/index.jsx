import "../css/app.css";
import React from "react";
import ReactDOM from "react-dom/client";
import App from "./components/App";

if (document.getElementById("root")) {
    console.log(" found");
    const element = document.getElementById("root");

    const props = Object.assign({}, element.dataset);

    const Index = ReactDOM.createRoot(element);

    Index.render(<App props={props} />);
} else {
    console.log("not found");
}
