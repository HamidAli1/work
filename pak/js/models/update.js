var Book = Backbone.Model.extend({
    defaults: {
        ID: "",
        firstname: "",
	lastname:""
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
   
   




// Lets create function which will return the custom URL based on the method type
    getCustomUrl: function (method) {
        switch (method) {
            case 'read':
                return 'http://localhost/work/mvc/public/student/selectone/'+ this.id;
                break;
            case 'create':
                return 'http://localhost:51377/api/Books';
                break;
            case 'update':
                return 'http://localhost/work/mvc/public/student/update'+ this.id;
                break;
            case 'delete':
                return 'http://localhost:51377/api/Books/' + this.id;
                break;
        }
    },
    // Now lets override the sync function to use our custom URLs
    sync: function (method, model, options) {
        options || (options = {});
        options.url = this.getCustomUrl(method.toLowerCase());
        
        // Lets notify backbone to use our URLs and do follow default course
        return Backbone.sync.apply(this, arguments);
    }







});
// Lets try to update a book [UPDATE]
var book1 = new Book({ ID: 1 });
book1.fetch({
    success: function (bookResponse) {
        console.log("Found the book: " + bookResponse.get("firstname"));
        // Let us update this retreived book now (doing it in the callback) [UPDATE]
        bookResponse.set("firstname", bookResponse.get("firstname") + "_updated");
        bookResponse.save({}, {
            success: function (model, respose, options) {
                console.log("The model has been updated to the server");
            },
            error: function (model, xhr, options) {
                console.log("Something went wrong while updating the model");
            }
        });
    }
});
