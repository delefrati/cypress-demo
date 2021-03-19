describe('Form Test', function () {

  it('Tests the form', function (){
    cy.visit('/')
      .invoke('getPage', 'form');

    // cy.get("#sent").should('not.be.visible');
    // cy.get('input[name=frm-name]').clear().type('something');
    // cy.get('input[name=frm-like]').click();
    // cy.get('input[name=frm-name]').type('{enter}');
    // cy.get("#sent").should('be.visible');

  });

});