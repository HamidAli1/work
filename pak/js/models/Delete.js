
var Book = Backbone.Model.extend({
    defaults: {
        id: "",
        fname: "",
		lname:""
    },
    idAttribute: "id",
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
   
    urlRoot: 'http://localhost/work/mvc/public/student/delete'
});




// Let us delete the model with id 13 [DELETE]
var book2 = new Book({ id: 434 });
book2.destroy({

  
    success: function (model, respose, options) {
        console.log("The model has deleted the server");
    },
    error: function (model, xhr, options) {
        console.log("Something went wrong while deleting the model");
    }
});


