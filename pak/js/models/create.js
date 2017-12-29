var Book = Backbone.Model.extend({
    defaults: {
        //ID: "",
        fname: "",
	lname:""
    },
    idAttribute: "ID",
    initialize: function () {
        console.log('Book has been initialized');
        this.on("invalid", function (model, error) {
            console.log("Houston, we have a problem: " + error)
        });
    },
    constructor: function (attributes, options) {
        console.log('Book\'s constructor had been called');
        Backbone.Model.apply(this, arguments);
    },
   
    urlRoot: 'http://localhost/work/mvc/public/student/insert'
});
// Lets perform a create operation [CREATE]
var book = new Book({ firstname: "khurram",lastname: "riaz",email: "k@GMAIL.com",address:"lahore" });
book.save({}, {
    success: function (model, respose, options) {
        console.log("The model has been saved to the server");
    },
    error: function (model, xhr, options) {
        console.log("Something went wrong while saving the model");
    }
});

