import express from "express";
import homecontroller from "../controllers/homeController";

let router = express.Router();

let initWebRoutes = (app) => {
    router.get('/', homecontroller.getHomePage);


    //chuyen trang khac , đường link
    router.get('/trang2', (req, res) => {
        return res.send('hellowork')
    });
    return app.use("/", router);
}

module.exports = initWebRoutes;