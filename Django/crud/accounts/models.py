from django.db import models

# Create your models here.
class Customer (models.Model):
    name = models.CharField(max_length=200)
    phone = models.CharField(max_length=12)
    email = models.CharField(max_length=200)
    date_create = models.DateField(auto_now_add = True)
    def __str__(self):
        return self.name
class Product (models.Model):
    CATEGORY=(
        ('indoor','indoor'),
        ('outdoor','outdoor')
    )
    name = models.CharField(max_length=200)
    price = models.CharField(max_length=12)
    category = models.CharField(max_length=200, choices=CATEGORY)
    description = models.CharField(max_length=200)
    date_create = models.DateField(auto_now_add = True)
    def __str__(self):
        return self.name
class Order (models.Model):
    STATUS=(
        ('pending','pending'),
        ('outofdelivery','outofdelivery'),
         ('deliverd','deliverd')
    )
    customer = models.ForeignKey(Customer,null = True,on_delete=models.SET_NULL)
    product = models.ForeignKey(Product,null = True,on_delete = models.SET_NULL)
    date_create = models.DateField(auto_now_add = True)
    status = models.CharField(max_length=200, choices=STATUS)