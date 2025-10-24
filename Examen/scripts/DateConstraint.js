//Front End Solution only, Se Necesita Validar la Fecha en el Backend una Vez se implemente
document
    .getElementById("day")
    .setAttribute("min", new Date().toLocaleDateString("fr-ca"));

document
    .getElementById("day")
    .setAttribute(
        "max",
        new Date(
            new Date().setMonth(new Date().getMonth() + 3),
        ).toLocaleDateString("fr-ca"),
    );
