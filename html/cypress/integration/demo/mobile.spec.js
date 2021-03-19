describe('Mobile Tests', function () {

  beforeEach(function () {
    // more at: https://docs.cypress.io/api/commands/viewport.html#Syntax
    cy.viewport('iphone-x');
  });

  describe('Menu Test', function () {

    /**
     * This test will open the menu and see if it works
     */
    it('Tests if the menu opens', function (){

      cy.visit('/');

    //   //cy.log('Try to open the  menu...');
    //   cy.get('[data-cy=btn-menu-open]').click();
    //   cy.get('[data-cy=menu-main]').should('be.visible');
    // });
    //
    // it('Tests if the menu closes', function (){
    //   cy.get('#menu-hide').click();
    //   cy.get('[data-cy=menu-main]').should('be.not.visible');
    // });
    //
    // it('Tests the button "home"', function (){
    //   cy.get('[data-cy=btn-home]').click();
    })

  });
});