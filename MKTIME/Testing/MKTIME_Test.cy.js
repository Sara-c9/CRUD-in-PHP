describe("MKTIME Test", () => {
  it("get error if email address don't exist", () => {
    cy.visit("http://localhost/Projects/MKTIME/login.php");

    cy.get("#email").type("fake@email.com");
    cy.get("#email").should("have.value", "fake@email.com");

    cy.get("#password").type("123");
    cy.get("#password").should("have.value", "123");

    cy.get("#login").click();

    cy.get("#err_msg").should("be.visible");
  });

  it("get error if password is wrong", () => {
    cy.visit("http://localhost/Projects/MKTIME/login.php");

    cy.get("#email").type("email@email.com");
    cy.get("#email").should("have.value", "email@email.com");

    cy.get("#password").type("1234");
    cy.get("#password").should("have.value", "1234");

    cy.get("#login").click();

    cy.get("#err_msg").should("be.visible");
  });

  it("lets you login & logout", () => {
    cy.visit("http://localhost/Projects/MKTIME/login.php");

    cy.get("#email").type("email@email.com");
    cy.get("#email").should("have.value", "email@email.com");

    cy.get("#password").type("123");
    cy.get("#password").should("have.value", "123");

    cy.get("#login").click();

    cy.url().should(
      "include",
      "http://localhost/Projects/MKTIME/home_login.php"
    );
    cy.get("#logout").click();

    cy.url().should("include", "http://localhost/Projects/MKTIME/home.php");
  });

  it("opens products page", () => {
    cy.visit("http://localhost/Projects/MKTIME/home.php");
    cy.get("#productsBtn").click();
    cy.get("#womenWatches").click();

    cy.url().should(
      "include",
      "http://localhost/Projects/MKTIME/women_watches.php"
    );
  });
});
