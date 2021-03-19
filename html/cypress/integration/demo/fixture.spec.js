describe('Mocking calls', function (){
  it('Make a mock call to a fake page', function (){
    cy.visit('/');

    cy.openMenu();

    cy.server()
    cy.fixture('demopages.json').as('demopage')
    cy.route('GET', 'content.php*', '@demopage').as('getDemoPage')

    cy.get('[data-cy=btn-home]').should('be.visible')
      .click();

    cy.wait('@getDemoPage').its('responseBody')
      .should('have.property', 'title')
      .and('include', 'Test page');

    cy.get('#content #title').should('have', 'Test page');

  });
})

Cypress.Commands.add("openMenu", function () {
  cy.get('[data-cy=btn-menu-open]').click();
  cy.get('[data-cy=menu-main]').should('be.visible');
});