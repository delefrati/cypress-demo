describe('Homepage Tests', function () {
  it('Tests the homepage URL', function (){
    cy.visit('/');
    //cy.title().should('eq', 'Cypress Demo');
  });
});


/*

Assertions: https://docs.cypress.io/guides/references/assertions.html
expect(obj).to.be.a('string')
cy.get(obj).should('be.a.string')

expect(obj).to.be.visible
cy.get(obj).should('be.visible')

expect(obj).to.have.length(3)
cy.get(obj).should('have.length', 3)

DOM selectors:
https://docs.cypress.io/api/commands/get.html#Arguments

*/

describe('Menu Test', function () {

  /**
   * This test will open the menu and see if it works
   */
  it('Tests if the menu opens', function (){
    //cy.log('Try to open the  menu...');
    cy.get('[data-cy=btn-menu-open]').click();
    cy.get('[data-cy=menu-main]').should('be.visible');
  });

  it('Tests if the menu closes', function (){
    cy.get('#menu-hide').click();
    cy.get('[data-cy=menu-main]').should('be.not.visible');
  });

  it('Tests the button "home"', function (){

    cy.get('[data-cy=btn-menu-open]').click().should('be.visible');
    cy.get('[data-cy=btn-home]').click();
    // cy.get('#content')
    //   .should('be.visible')
    //   .should('contain', 'jdelefrati@godaddy.com');

  })

});