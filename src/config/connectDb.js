const { Sequelize } = require('sequelize');

// Option 3: Passing parameters separately (other dialects)
const sequelize = new Sequelize('qlpk', 'root', null, {
    host: 'localhost',
    dialect: 'mysql',
    logging: false
});
let connectDb = async () => {
    try {
        await sequelize.authenticate();
        console.log('✅ Kết nối thành công.');
    } catch (error) {
        console.error('❌ Lỗi kết nối:', error);
    }
};
module.exports = connectDb;