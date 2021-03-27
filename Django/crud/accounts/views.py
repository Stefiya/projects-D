from django.shortcuts import render
from django.http import HttpResponse 
from . models import *
# Create your views here.
def index(request):
        customer=Customer.objects.all()
        order=Order.objects.all()
        total_order=order.count()
        deliverd = order.filter(status='deliverd').count()
        pending = order.filter(status='pending').count()
        context={
                'customer':customer,
                'order':order,
                'total_order':total_order,
                'deliverd':deliverd,
                'pending':pending
                }
            
        return render(request,'accounts/dashboard.html',context)
    

def product(request):
        product=Product.objects.all()
        return render(request,'accounts/product.html',{'product':product})
def customer(request,pk):
        customer = Customer.objects.get(id=pk)
        context = {'customer':customer}
        return render(request,'accounts/customer.html',context)

