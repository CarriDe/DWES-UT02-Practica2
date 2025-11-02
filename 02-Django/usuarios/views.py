from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse

def usuario_view(request):
    datos = {
        "nombre": "Laura",
        "apellidos": "Gómez Pérez",
        "dni": "12345678A",
        "email": "laura.gomez@example.com",
        "telefono": "654321987",
        "pagos": {
            "enero": 20,
            "febrero": 20,
            "marzo": 20,
            "abril": 0,
            "mayo": 20,
            "junio": 20,
            "julio": 20,
            "agosto": 0,
            "septiembre": 20,
            "octubre": 20,
            "noviembre": 20,
            "diciembre": 20
        }
    }
    html = f"""
    <html>
        <head><title>Datos de un Usuario</title></head>
        <body>
            <h1>Información personal</h1>
            <!--Para incluir datos que se encuentran en la vista, usamos llaves como se ve a continuación -->
            <h3>{datos['nombre']} {datos['apellidos']}</h3>
            <p><strong>Apellidos:</strong> </p>
            <p><strong>Edad:</strong> {datos['edad']}</p>
            <p><strong>Email:</strong> {datos['email']}</p>
        </body>
    </html>


    """
'''




# Mostrar los datos personales
print("=== Datos del usuario ===")
print(f"Nombre: {usuario['nombre']}")
print(f"Apellidos: {usuario['apellidos']}")
print(f"DNI: {usuario['dni']}")
print(f"Email: {usuario['email']}")
print(f"Teléfono: {usuario['telefono']}\n")

# Mostrar pagos mes a mes
print("=== Pagos de la asociación ===")
total_pagado = 0
for mes, cantidad in usuario["pagos"].items():
    estado = "PAGADO" if cantidad > 0 else "PENDIENTE"
    print(f"{mes.capitalize():<10}: {cantidad} € -> {estado}")
    total_pagado += cantidad

print("\nTotal anual pagado:", total_pagado, "€")
'''


return HttpResponse(html)
