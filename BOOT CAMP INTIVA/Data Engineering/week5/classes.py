# class "snake" with attr
# body_length
# species_name
# is_poisonous
# with method
# slither(init_state, slit_distance) returns final_state
# bite() returns "dead" if poisonous, "wounded" if not

class Snake:
    def __init__(self, body_length:int, species_name:str, is_poisonous:bool):
        self.body_length = body_length
        self.species_name = species_name
        self.is_poisonous = is_poisonous
        self.tail = "hahah"

    def slither(self, init_state:int, slit_distance:int):
        self.final_state = init_state + slit_distance
        return self.final_state
    def bite(self):
        if self.poisonous:
            return "dead"
        else:
            return "wounded"
    def sneeze(self):
        print(self.tail)

    def constrict(self):
        if (self.species_name == "cobra"):
            print("ular cobra")
        else:
            print("bukan ular cobra")

Example = Snake(90, "Cobra", True)
Example.slither(70, 77)
Example.constrict()




# class Website:
#      def __init__(self, url, founding_year, free_to_use):
#          self.url = url
#          self.founding_year = founding_year
#          self.free_to_use = free_to_use
# ...     def info(self):
# ...         print("URL:", self.url)
# ...         print("Founding year:", self.founding_year)
# ...         print("Free to use:", self.free_to_use)
# ...
# >>> github = Website('https://github.com/', 2008, True)
# >>> github.info()