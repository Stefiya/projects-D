from django.shortcuts import render
from django.http import HttpResponse
from . models import products
# Create your views here.
def index(request):
    pro1 = products.objects.all
    #return HttpResponse("<h1>Hello World</h1>")
    return render(request,'index.html',{'pro2':pro1})

def about(request):
    return HttpResponse("<h1> This is about page </h1>") 