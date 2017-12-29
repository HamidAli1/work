var Book = Backbone.Model.extend({
    defaults: {
        ID: "",
        firstname: ""
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
    validate: function (attr) {
        if (!attr.BookName) {
            return "Invalid BookName supplied."
        }
    },
    parse : function(response, options) {
               document.write(JSON.stringify(response.attributes));
            },

    urlRoot: 'http://localhost/work/mvc/public/student/selectone/'

  



});
// Now let us try to retrieve a book [READ]
var book1 = new Book({ ID: 1});

book1.fetch({
    success: function (model, response) {
        debugger;
     console.log(response.get('firstname'));
    },
    error: function(){
     console.log('fgdfg');
       
    }
       
});


