import express from "express";
import bodyParser from "body-parser";
import viewengine from "./config/viewengine";
import initWebRoutes from "./route/web";
import connectDB from "./config/connectDb";
import dotenv from "dotenv";
dotenv.config();

let app = express();

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }))

viewengine(app);
initWebRoutes(app);

connectDB();

let port = process.env.PORT;

app.listen(port, () => {
    console.log("Chạy Thành Công : " + port)
})