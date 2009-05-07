(function() {
  Ext.namespace('Ext.ux');
  
  Ext.ux.FileUpload = function(config) {
    Ext.apply(this, config);
    
    this.panel = {
    };
    
    Ext.ux.FileUpload.superclass.constructor.call(this, this.panel);
  };
  
  Ext.extend(Ext.ux.FileUpload, Ext.Panel, {
  });

})();
